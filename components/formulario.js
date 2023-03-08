export default{
    name: document.querySelector("#myFrom"),
    confi: {
        method: "POST", 
        body: null
    },
    Send(){
        this.name.addEventListener("submit", async(e)=>{
            e.preventDefault();
            this.confi.body = JSON.stringify(Object.fromEntries(new FormData(e.target)));
            let peticion = await fetch(this.name.action,this.confi);
            let success = await peticion.text();
            this.name.reset();
            console.log(success);
        })
    }
}