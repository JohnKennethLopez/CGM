const defaultBtn = document.querySelector("#intBTN");
const upload = document.querySelector("#custom-btn");
const image = document.querySelector("#uploadimage");
const filename = document.querySelector(".file-name");
const wrapper = document.querySelector(".wrapper");
const cancel = document.querySelector("#cancel");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    function defaultbtnactive(){
            defaultBtn.click();
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
    