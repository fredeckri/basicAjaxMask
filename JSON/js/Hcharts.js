 /*
 Versão 1.0 
 Classe para confecção dinâmica de Highcharts
 Autor: Frederick C Marques
 www.frederickmarques.com.br
 */
 
 //construção Hcharts
 class Hcharts {
    constructor() 
        {
    //Construção de arrays de objetos de modo propenso a boas práticas no HTML5
    this.nome="Gráfico Personalizado";
    this.chart=[]; // aqui inserir objeto: Type(line,pie,column...), opcional events
    this.title=[]; // aqui inserir objeto: text(text)
    this.subtitle=[]; // aqui inserir objeto: text(text)
    
    // propriedade deve ser otimizada através de metodo
    this.tootip=[]; // -- tags html com variaveis {point.key}{point.y}{series.name}
    // propriedade deve ser otimizada através de metodo
   
    this.xAxis=[]; // aqui inserir objeto(s): categories, crosshair(true,false)
    this.yAxis=[]; // aqui inserir objeto(s): min(valor minimo),title(text)
    this.series=[]; // aqui inserir objeto(s): {name, data[array]}
    this.plotOptions=[]; // aqui inserir objetos(s):column: {pointPadding: 0.2, borderWidth: 0 }
    this.credits=[]; // aqui inserir objeto: enabled(false,true)
    //Object.freeze(this); //congelamento da instância - opcional
    console.log(this.nome());
        }
    
    set chart(graf) {this.chart=graf;}
    set title(title) {this.title=title;}
    set subtitle(subtitle) {this.subtitle=subtitle;}
    set tootip(tootip) {this.tootip=tootip;}
    set xAxis(xAxis) {this.xAxis=xAxis;}
    set yAxis(yAxis) {this.yAxis=yAxis;}
    set series(series) {this.series=series;}
    set plotOptions(plotOptions) {this.plotOptions=plotOptions;}
    set credits(credits) {this.credits=credits;}
    // todos os sets se referenciam com base na inserção de dados
    get nome() {return  this.nome;}
    get chart() {return  this.chart;}
    get title() {return this.title;}
    get subtitle() {return this.subtitle;}
    get tootip() {return this.tootip;}
    get xAxis() {return this.xAxis;}
    get yAxis() {return this.yAxis;}
    get series() {return this.series}
    get plotOptions() {return this.plotOptions}
    get credits() {return this.credits;}

    // atraves das propriedades
    montajson(){
        if (!this.series) {
        let grafj = {}
        grafj.chart=this.chart;     
        grafj.title=this.title;
        grafj.subtitle=this.subtitle;
        grafj.tootip=this.tootip;
        grafj.xAxis=this.xAxis;
        grafj.yAxis=this.yAxis;
        grafj.series=this.series;
        grafj.plotOptions=this.plotOptions;
        grafj.credits=this.credits;
        return grafj;
        }
        else
        return console.log("Erro ao montar gráfico verifique series");
        /*para exportar para o grafico basta inserir 
        o metodo com suas propriedade
        depois exportar pelo metodo para construção 
        $('#idhtmldografico').highcharts(meujson);
        */
    }
    imprime() {
        console.log(this.nome);
    }
       
}
//construção Hcharts
//elementData.push( {"name": 'net pay', "y": earnings_total - deductions_total });