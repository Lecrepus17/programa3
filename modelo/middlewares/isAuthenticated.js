const jwt = require("jsonwebtoken")

const getToken = require("../utils/getToken")

const isAuthenticated = (req, _, next) => {
    try {
        const {authorization} = req.headers
        
        const token = getToken(authorization)
        const authSecret = process.env.AUTH_SECRET

        const {email} = jwt.verify(token, authSecret)

        if (email !== "admin@email.com") 
            return next(new Error("Não autorizado!"))

        return next()
    }catch (e){
        return next(new Error(e.message))
    }
}

module.exports = isAuthenticated