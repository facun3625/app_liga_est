import React, { useState, useEffect } from 'react';

function Posiciones() {
  const [posiciones, setPosiciones] = useState([]);
  const [escudos, setEscudos] = useState([]);
  const [error, setError] = useState(null); // Nuevo estado para manejar errores
  const categoria = 'Primera A';

  useEffect(() => {
    fetch('http://localhost/liga_estadisticas/api.php')
      .then(response => response.json())
      .then(data => {
        setPosiciones(data.posiciones);
        setEscudos(data.escudos);
        console.log('Escudos:', data.escudos); // Agregar console.log para imprimir los escudos
      })
      .catch(error => {
        console.error('Error al obtener los datos:', error);
        setError('Error al obtener los datos. Por favor, intenta nuevamente.'); // Actualiza el estado de error
      });
  }, []);

  if (error) {
    return <div>Error: {error}</div>; // Si hay un error, muestra mensaje de error
  }

  return (
    <div>
      <h2>Tabla de Posiciones</h2>
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
            .filter(equipo => equipo.categoria === categoria) // Filtrar equipos de la categoría 'Primera A'
            .map((equipo, index) => (
              <tr key={index}>
                <td>{index + 1}</td>
                <td>
                  {escudos.map(escudo => {
                    if (escudo.equipo === equipo.equipos_pos) {
                      return <img key={escudo.equipo} src={`../assets/escudos/${escudo.escudo}`} alt="" />;
                    }
                  })}
                  {/* <img src={`../assets/escudos/e_Academia AC.jpg`} alt="" /> */}
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
