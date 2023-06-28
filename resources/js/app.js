import './bootstrap';

import '../css/app.scss';


const rejectBtn = document.getElementById('reject-btn');

rejectBtn.addEventListener('click',function(){
    document.getElementById('rejection-note-div').style.display="block";
    this.style.display="none";
    document.getElementById('reject-btn-2').style.display="inline-block";
})