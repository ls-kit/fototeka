document.addEventListener("contextmenu", function (e) {
  e.preventDefault();
  if(options.enableAlert) {
    alert(options.alertText);
  }
});

var options = {
  enableAlert: true, // Set this false to deactivate alert
  alertText: "Kopjimi i të dhënave në këtë faqe nuk lejohet. Ju lutemi, shijojeni përmbajtjen pa e kopjuar atë, dhe na vizitoni përsëri." // Customize this to change alert text
}
