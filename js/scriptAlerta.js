let alerta = document.querySelector('.alerta');
        
        alerta.classList.add('alertShow');
        setTimeout(() => {
            alerta.classList.remove('alertShow');
        }, 3000);
