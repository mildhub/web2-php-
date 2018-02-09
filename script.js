function change(self) {
    var bodycolor = document.querySelector('body');
    if(self.value==='night'){
        bodycolor.style.backgroundColor='#000';
        bodycolor.style.color='#ccee77';
        self.value='day';

        var box=document.getElementsByClassName('border');
        for (let i = 0; i < box.length; i++) {
            box[i].style.borderColor='purple';
        }

        var link = document.querySelectorAll('a');
        var i=0;
        while (i<link.length) {
            link[i].style.color="lightblue";
            i+=1;
        }
    }else{
        bodycolor.style.backgroundColor='#fff';
        bodycolor.style.color='#000';
        self.value='night';

        var box=document.getElementsByClassName('border');
        for (let i = 0; i < box.length; i++) {
            box[i].style.borderColor='orange';
        }

        var link = document.querySelectorAll('a');
        var i=0;
        while (i<link.length) {
            link[i].style.color="lightgreen";
            i+=1;
        }
    }
}