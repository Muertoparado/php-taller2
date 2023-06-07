//php -S localhost:3000


let ej1 = document.querySelector("#ejercicio1"); //seleccionamos el formulario
    ej1.addEventListener("submit", async (e) => { //creamos un evento de escucha al formulario de un "Submit"
        e.preventDefault(); //prevenimos el comportamiento por defecto del formulario al hacer un submit
        let myHeaders = new Headers({ "Content-Type": "application/json" }) //creamos el header que vamos a incluir en el fetch
        let data = Object.fromEntries(new FormData(e.target)); //recuperamos los datos que se llenan en el form
        let config = { //creamos la configuracion que vamos a pasar al fetch
            method: "POST",
            headers: myHeaders,
            body: JSON.stringify(data)
        };
        let res = await (await fetch("model/api.php", config)).text(); //realizamos el fetch y transformamos la respuesta a txt
        document.querySelector("#ej1").innerHTML = res; //insertamos la respuesta en la etiqueta <pre></pre>
})

let ej2 = document.querySelector("#ejercicio2");
    ej2.addEventListener("submit", async (e) => {
        e.preventDefault(); 
        let myHeaders = new Headers({ "Content-Type": "application/json" })
        let data = Object.fromEntries(new FormData(e.target)); 
        let config = {
            method: "POST",
            headers: myHeaders,
            body: JSON.stringify(data)
        };
        let res = await (await fetch("model/api2.php", config)).text(); 
        document.querySelector("#ej2").innerHTML = res;
})

let ej6 = document.querySelector("#ejercicio6");
    ej6.addEventListener("submit", async (e) => {
        e.preventDefault(); 
        let myHeaders = new Headers({ "Content-Type": "application/json" })
        let data = Object.fromEntries(new FormData(e.target)); 
        console.log(data);
        let config = {
            method: "POST",
            headers: myHeaders,
         //   body: JSON.stringify(data)
        };
        let res = await (await fetch("model/api6.php", config)).text(); 
        document.querySelector("#ej6").innerHTML = res;
})