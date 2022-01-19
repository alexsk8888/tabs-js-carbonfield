let all_butcnt = Array.from(document.querySelectorAll('.tbcnt_but')),
all_cntcnt= Array.from(document.querySelectorAll('.tbcnt_cnt'));

all_butcnt.forEach(function(item, i) {
console.log("element" + item + " number " + i);  

item.addEventListener('click', function(e) {
  removeClassList1(all_butcnt, all_cntcnt)
  this.classList.add('tbcntb_act');
  all_cntcnt[i].classList.add('tbcntc_act');          
}, false);
});

function removeClassList1(but, cnt){
but.forEach(function(item) {
item.classList.remove('tbcntb_act')
})
cnt.forEach(function(item) {
item.classList.remove('tbcntc_act')
})
}