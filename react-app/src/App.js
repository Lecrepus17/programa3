import { useState } from 'react'
import './app.css'

export const App = () => {
  const[itens, setItens] = useState([])

  return (
      <div className='app'>
        <h1> Itens </h1>
        <div>
          <input type="text"/>
          <button type='Button'>+</button>
        </div>
        <ul>
          {
            itens.length > 0 && itens.map()
          }
          <li>
            <span>Morango</span>
            <button type='Button'>-</button>
          </li>
          <li>
            <span>Limão</span>
            <button type='Button'>-</button>
          </li>
        </ul>
      </div>
    )
}