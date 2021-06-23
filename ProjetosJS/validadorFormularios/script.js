let B7validator = {
    handleSubmit:(event)=>{
        event.preventDefault();
        let send = true;

        let inputs = form.querySelectorAll('input');

        B7validator.clearErrors();
        
        for(let i=0;i<inputs.length;i++){
            let input = inputs[i];
            let check = B7validator.checkInput(input);
            if(check !== true){
                send = false;
                B7validator.showError(input, check);
            }
        }
       
        if(send){
            form.submit();
        }
    },
    checkInput:(input) => {
        let rules = input.getAttribute('data-rules');

        if(rules !== null){
            rules = rules.split('|');            
            for(let k in rules){
                let rDetails = rules[k].split('=');                                
                switch(rDetails[0]){
                    case 'required':
                        if(input.value == ''){
                            return 'Campo não pode ser vazio.';
                        }
                    break;
                    case 'min':
                        if(input.value.length < rDetails[1]){
                            return 'Campo precisa ter pelo menos '+rDetails[1]+'caracteres'; 
                        }
                    break;
                    case 'email':
                        if(input.value != ''){
                            let regex = /^([a-z]){1,}([a-z0-9._-]){1,}([@]){1}([a-z]){2,}([.]){1}([a-z]){2,}([.]?){1}([a-z]?){2,}$/i;
                            if(!regex.test(input.value.toLowerCase())){
                                return 'Insira um email válido.';
                            }
                        }                        
                    break;    
                }
            }
        }

        return true;
    },
    showError:(input, error) => {
        input.style.borderColor = '#ff0000';

        let errorElement = document.createElement('div');
        errorElement.classList.add('error');
        errorElement.innerHTML = error;

        input.parentElement.insertBefore(errorElement, input.ElementSibling);
    },
    clearErrors:() => {
        let inputs = form.querySelectorAll('input');
        for(let i=0;i<inputs.length;i++){
            inputs[i].style = '';
        }

        let errorElements = document.querySelectorAll('.error');
        for(let i=0;i<errorElements.length;i++){
            errorElements[i].remove();
        }
    }
};

let form = document.querySelector('.b7validator');
form.addEventListener('submit', B7validator.handleSubmit); 