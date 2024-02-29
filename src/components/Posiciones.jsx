import React, { useState, useEffect } from 'react';

function Posiciones() {
  const [posiciones, setPosiciones] = useState([]);
  const [escudos, setEscudos] = useState([]);
  const [error, setError] = useState(null); // Nuevo estado para manejar errores
  const [zona, setZona] = useState('Primera A'); // Estado para almacenar la categoría seleccionada
  const [categorias, setCategorias] = useState([]); // Estado para almacenar las categorías

  // Función para obtener las categorías
  useEffect(() => {
    fetch('http://localhost/liga_estadisticas/api_cat.php')
      .then(response => response.json())
      .then(data => {
        setCategorias(data.categorias); // Actualizar el estado de categorías
      })
      .catch(error => console.error('Error al obtener las categorías:', error));
  }, []); // La función se ejecuta solo una vez al cargar el componente

  // Función para manejar el cambio de categoría
  const handleChangeCategoria = (event) => {
    setZona(event.target.value); // Actualizar la categoría seleccionada
  };

  // Función para obtener las posiciones al cambiar la categoría
  useEffect(() => {
    fetch(`http://localhost/liga_estadisticas/api_pos.php?zona=${zona}`)
      .then(response => response.json())
      .then(data => {
        setPosiciones(data.posiciones);
        setEscudos(data.escudos);
      })
      .catch(error => {
        console.error('Error al obtener los datos:', error);
        setError('Error al obtener los datos. Por favor, intenta nuevamente.'); // Actualiza el estado de error
      });
  }, [zona]); // La función se ejecuta cada vez que cambia la categoría seleccionada

  if (error) {
    return <div>Error: {error}</div>; // Si hay un error, muestra mensaje de error
  }

  return (
    <div>
      <h2>Tabla de Posiciones</h2>
      {/* Select para elegir la categoría */}
      <select value={zona} onChange={handleChangeCategoria}>
        {categorias.map((categoria, index) => (
          <option key={index} value={categoria}>{categoria}</option>
        ))}
      </select>
      <table className="table" style={{ backgroundColor: '#293049', color: '#fff' }}>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th></th>
            <th scope="col">Equipo</th>
            <th scope="col">Pts</th>
            <th scope="col">Jdos.</th>
            <th scope="col">Gdos.</th>
            <th scope="col">Edos.</th>
            <th scope="col">Pdos.</th>
            <th scope="col">GF</th>
            <th scope="col">GC</th>
            <th scope="col">DG</th>
          </tr>
        </thead>
        <tbody>
          {posiciones
            .sort((equipoA, equipoB) => {
              if (equipoA.pts !== equipoB.pts) {
                return equipoB.pts - equipoA.pts;
              } else {
                return equipoB.goles_fav - equipoA.goles_fav;
              }
            })
            .map((equipo, index) => (
              <tr key={index}>
                <td>{index + 1}</td>
                <td>
                  {escudos.map(escudo => {
                    if (escudo.equipo === equipo.equipos_pos) {
                      return (
                        <img
                          width={`20px`}
                          key={escudo.equipo}
                          src={`../assets/escudos/${escudo.escudo}`}
                          alt=""
                        />
                      );
                    }
                  })}
                </td>
                <td>{equipo.equipos_pos}</td>
                <td>{equipo.pts}</td>
                <td>{equipo.jugados}</td>
                <td>{equipo.ganados}</td>
                <td>{equipo.empatados}</td>
                <td>{equipo.perdidos}</td>
                <td>{equipo.goles_fav}</td>
                <td>{equipo.goles_enc}</td>
                <td>{equipo.diferencia_gol}</td>
              </tr>
            ))}
        </tbody>
      </table>
    </div>
  );
}

export default Posiciones;
