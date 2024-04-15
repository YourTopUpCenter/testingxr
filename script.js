"use strict"

const form = document.querySelector('.form');
form.addEventListener('submit', fuction (e) {
    e.preventDefault();
    sendMessage(form);
})

async function sendMessage(form) {
    const formData = new FormData(form);
    if (formData){
        const url = 'sendmessage.php';
        const response = await fetch(url, {
            method: "POST",
            body: formData
        });
        if (response.ok){
            form.reset();
            alert('Form sent!');
        }else{
            alert('Error');
        }
    }
}