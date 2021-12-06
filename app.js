let all_but = Array.from(document.querySelectorAll('.tb_but')),
all_cnt= Array.from(document.querySelectorAll('.tb_cnt'));

all_but.forEach(function(item, i) {
console.log("element" + item + " number " + i);  

item.addEventListener('click', function(e) {
  removeClassList(all_but, all_cnt)
  this.classList.add('tbb_act');
  all_cnt[i].classList.add('tbc_act');          
}, false);
});

function removeClassList(but, cnt){
but.forEach(function(item) {
item.classList.remove('tbb_act')
})
cnt.forEach(function(item) {
item.classList.remove('tbc_act')
})
}