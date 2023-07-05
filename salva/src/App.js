import './app.css'
import { useState } from "react";
// import { Botao } from './componentes/Botao';
// import { Texto } from './componentes/Texto'
import {Botao, Texto} from './componentes'

export const App = () => {
  const [quantidade, setQuantidade] = useState(0)
  const aumenta = () => {
    if(quantidade < 10)
      setQuantidade(q => q + 1)
  }
  const diminui = () => {
    if (quantidade > 0)
      setQuantidade(q => q - 1)
  }
  return (
    <div className="app">
      <Texto texto={quantidade}/>
      <Botao className={quantidade === 0 ? 'vermelho' : ''} disabled={quantidade === 0} onClick={diminui}>-</Botao>
      <Botao className={quantidade === 10 ? 'vermelho' : ''} disabled={quantidade === 10} onClick={aumenta}>+</Botao>
    </div>
  );
}