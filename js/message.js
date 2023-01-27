const message = (document.querySelector('.message')) ? document.querySelector('.message') : null;
        
        if (message) {
            setTimeout(() => {  message.classList.add("disappear") }, 2000);
           
        }
