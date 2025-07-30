export default function creationCardToggleAnimation() {
  const buttons_open =   document.querySelectorAll('.btn-open');
  buttons_open.forEach((btn)=> {
    btn.addEventListener('click', function(){
    const card_parrent = btn.closest('.creations-card__inner')  
      console.log(card_parrent);
      card_parrent?.classList.toggle('active')
    });
  })
}
