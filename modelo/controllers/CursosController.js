const { v4: uuidv4 } = require('uuid');

let cursos = []

exports.getAll = () => {
    return cursos
}

exports.getById = (id) => {
    let curso = cursos.find(c => c.id === id)
    if (!curso) throw new Error("Registro não encontrado!")

    return curso

}

exports.create = (input) => {
    const curso = {...input, id: uuidv4()}
    cursos.push(curso)
    return curso
}

exports.delete = (id) => {
    let cursoRemovido = cursos.find(c => c.id === id)
    if (!cursoRemovido) throw new Error("Registro não encontrado!")

    cursos = cursos.filter(c => c.id !== id)

    return cursoRemovido
}