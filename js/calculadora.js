
/* Este es el codigo del calculo de los valores de precio de compra, de % de utilidades y el Iva, el cual nos arroja un valor de Vemta y un valor de ganancia*/

function calcular() {
    let a1 = document.f1.a.value;
    let b1 = document.f1.b.value;
    let c1 = 19
    let d1 = ((parseFloat(a1)*parseFloat(b1))/100)+(parseFloat(a1)*parseFloat(c1))/100+(parseFloat(a1)); 
    let e1 = parseFloat(a1)*parseFloat(b1)/100;
    document.f1.d.value=d1;
    document.f1.e.value=e1;
    }

    /* Este es el codigo del calculo de los valores de las resistencias en cada banda*/

    function calcularResis(){
    
        let a = document.f1.b1.value;
        let b = document.f1.b2.value;
        let x = document.f1.b3.value;
        let r = document.f1.c.value;
        r1= a.toString()+b.toString();
        r=parseFloat(r1)*parseFloat(x);
       document.f1.c.value=r;
        
    }