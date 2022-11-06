const defaultbTn= document.querySelector("#default");
const upload = document.querySelector("#BTN");
const image = document.querySelector("#annimage");
const filename = document.querySelector(".filename");
const wrapper = document.querySelector(".wraper");
const cancel = document.querySelector("#cancell");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    function myFunction(){
            defaultbTn.click();
        }
        defaultBtn.addEventListener("change", function(){
            const file = this.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                     image.src = result;
                     wrapper.classList.add("active");
                }
                cancel.addEventListener("click", function(){
                    image.src = "";
                    wrapper.classList.remove("active");
                });
                reader.readAsDataURL(file);
            }
            if(this.value){
                let valueStore = this.value.match(regExp);
                filename.textContent = valueStore;
            }
        });
    