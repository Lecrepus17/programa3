const express = require("express")

const router = express.Router();

const cursosController = require("../controllers/CursosController");
const isAuthenticated = require("../middlewares/isAuthenticated");

router.get('/cursos', isAuthenticated, (_, res) => {
    return res.json(cursosController.getAll())
})

router.get('/cursos/:id', isAuthenticated, (req, res) => {
    const {id} = req.params
    return res.json(cursosController.getById(id))
})

router.post('/cursos', isAuthenticated, (req, res) => {
    const {nome} = req.body
    const curso = cursosController.create({nome})
    res.json(curso)
})

router.delete('/cursos/:id', isAuthenticated, (req, res) => {
    const {id} = req.params
    const cursoRemovido = cursosController.delete(id)
    return res.json(cursoRemovido)
})

module.exports = router