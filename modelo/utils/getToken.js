const getToken = (authorization) => {
    if (!authorization) throw new Error("Token não informado!")

    const parts = authorization.split(" ")

    if (parts.length !== 2) throw new Error("Erro no token!")

    const [bearer, token] = parts

    if (!/^Bearer$/i.test(bearer)) 
        throw new Error("Token mal formatado!")

    if (!token) 
        throw new Error("Token não informado!")

    return token
}

module.exports = getToken