import {useState} from "react"
export const App = () => {
  const [quantidade, setQuantidade] = useState(0)

  const aumenta = () => {
    setQuantidade((q) => q+1)
  }
  const diminui = () => {
    setQuantidade((q) => q-1)
  }

  return (
    <>
    <span>{quantidade}</span>
    <button disabled={quantidade === 10} onClick={aumenta}>+</button>
    <button disabled={quantidade === -10}  onClick={diminui}>-</button>
    </>
  );
}

