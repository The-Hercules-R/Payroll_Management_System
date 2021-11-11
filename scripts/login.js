function login() {
  var name = document.getElementById('_username').value;
  var pass = document.getElementById('_password').value;

  var _u_sok = 'admin';
  var _p_sok = 'admin';

  if (name == '') {
    alert('Please input Your Username');
  } else if (pass == '') {
    alert('Please input your Password');
  } else {
    if (name != _u_sok) {
      alert('Wrong Username');
      document.getElementById('_username').style.color = 'red';
    } else if (pass != _p_sok) {
      alert('Wrong Password');
      document.getElementById('_password').style.color = 'red';
    } else {
      location.replace('../pages/home.html');
    }
  }
}
