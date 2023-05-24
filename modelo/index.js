require("dotenv").config()

const express = require("express")
const bodyParser = require("body-parser")
const authRouter = require("./api/auth")
const cursosRouter = require("./api/cursos")

const app = express()
app.use(bodyParser.json(0))
app.use(bodyParser.urlencoded({extended: false}))

app.use(authRouter)
app.use(cursosRouter)

const port = process.env.PORT
app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`)
})