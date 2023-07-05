import React, { useState } from 'react';
import './app.css';

export const App = () => {
  const [itens, setItens] = useState(['Morango']);
  const [texto, setTexto] = useState('');

  const add = () => {
    setItens([...itens, texto]);
    setTexto('');
  };

  const handleChange = (event) => {
    setTexto(event.target.value);
  };
  const removerItem = (item) => {
    setItens(itens.filter(e => e != item))
  }
  return (
    <div className='app'>
      <h1>Itens</h1>
      <div>
        <input value={texto} onChange={handleChange} type='text' />
        <button onClick={add} type='button'>+</button>
      </div>
      <ul>
        {itens.length > 0 ? (
          itens.map((el, index) => (
            <li key={index}>
              <span>{el}</span>
              <button  onClick={() => removerItem(el)} type='button'>-</button>
            </li>
          ))
        ) : (
          <li>Nenhum item encontrado</li>
        )}
      </ul>
    </div>
  );
};
