var senior_care_lite_Keyboard_loop = function (elem) {
  var senior_care_lite_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var senior_care_lite_firstTabbable = senior_care_lite_tabbable.first();
  var senior_care_lite_lastTabbable = senior_care_lite_tabbable.last();
  senior_care_lite_firstTabbable.focus();

  senior_care_lite_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      senior_care_lite_firstTabbable.focus();
    }
  });

  senior_care_lite_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      senior_care_lite_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};