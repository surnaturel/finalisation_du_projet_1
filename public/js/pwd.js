/*......     Gere le mot de passe    ......*/

$(function () {
  //Afficher l'ancien pwd lors de l'event hover sur l'icone how-old-pass

  var txtoldPwd = $('.oldpwd');

  $('.show-old-pass').hover(
      function(){
        txtoldPwd.attr('type', 'text');
      },
      function(){
        txtoldPwd.attr('type', 'password');
      }
    )

    //Afficher le nouvaau pwd lors de l'event hover sur l'icone show-new-pwd

  var txtnewPwd = $('.newpwd');

  $('.show-new-pwd').hover(
      function(){
        txtnewPwd.attr('type', 'text');
      },
      function(){
        txtnewPwd.attr('type', 'password');
      }
    )
});
