 //construção request
class Rquest {
    constructor(nome,senha) {
    
    this._nome=nome;
    this._senha=senha;
    Object.freeze(this); //congelamento da instância
        }

    get nome() {
        return this._nome; 
    }
    get senha() {
        return this._senha;
    }
       
}
//construção request
