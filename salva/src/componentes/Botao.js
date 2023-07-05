export const Botao = ({className, onClick, disabled, children}) => {
    return (
        <button className={className} disabled={disabled} onClick={onClick}>{children}</button>
    )
}