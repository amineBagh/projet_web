$(function () {
  $('#contactForm input, #contactForm textarea').jqBootstrapValidation({
    preventSubmit: true,
    submitError: function (event) {
      event.preventDefault()
    },
    submitSuccess: function () {
      $this = $('#sendMessageButton')
      $this.prop('disabled', true)
    },
    filter: function () {
      return $(this).is(':visible')
    },
  })

  $('a[data-toggle="tab"]').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
})

$('#name').focus(function () {
  $('#success').html('')
})
