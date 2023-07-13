console.log("js is connected");
const observer = new IntersectionObserver((e)=>{
e.forEach((x)=>{
    if(x.isIntersecting){
        console.log(x.isIntersecting);
    }else{
        console.log("removed");
    }
});
});

let target = document.querySelectorAll(".text");

target.forEach((t)=>{
    observer.observe(t);
});

