

// Toastr
$(function() {

    $('body').init(function() {
      var msg   = 'Contraseña incorrecta.';
      var title = 'Error Contraseña';
      var type  = 'warning';
  
      toastr[type](msg, title, {
        positionClass:     'toast-top-right',
        closeButton:       'toastr-close-button',
        progressBar:       'toastr-progress-bar',
        showDuration:       '1500',
        preventDuplicates: 'toastr-prevent-duplicates',
        newestOnTop:       'toastr-newest-on-top',
        rtl:               $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl'
      });
    });
  
    $('#toastr-clear').on('click', function() {
      toastr.clear();
    });
  });
  
  