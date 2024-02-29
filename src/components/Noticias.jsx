import React, { useState, useEffect } from 'react';

function Noticias() {
  const [noticias, setNoticias] = useState([]);

  useEffect(() => {
    fetch('https://lsf.ar/wp-json/wp/v2/posts?per_page=20')
      .then(response => response.json())
      .then(data => {
        setNoticias(data);
      })
      .catch(error => console.error('Error al obtener las noticias:', error));
  }, []);

  return (
    <div>
      <h2>Noticias</h2>
      {noticias.map(noticia => (
        <div key={noticia.id} style={{ marginBottom: '20px' }}>
          <p>Fecha: {noticia.date}</p>
          <h3>{noticia.title.rendered}</h3>
          <p dangerouslySetInnerHTML={{ __html: noticia.excerpt.rendered }}></p>
          <a href={noticia.link} target="_blank" rel="noopener noreferrer">Leer más</a>
        </div>
      ))}
    </div>
  );
}

export default Noticias;
