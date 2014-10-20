$ ->
  $pizza = $('#pizza-pizza')
  $('#pizza-img').hover ->
    $pizza.show()
  , ->
    $pizza.hide()
  $('#pizza-pizza').mouseenter ->
    $pizza.show()