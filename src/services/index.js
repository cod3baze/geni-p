const dvx = document.querySelector('div#tsx')

function hadleNavigate(id) {
  if (id === 1) {
    return dvx.innerHTML += `<?php require('../components/profilex.php') ?> `;
  }
  if (id === 2) {
    return dvx.innerHTML += `<?php require('../components/securityx.php') ?> `;
  }
}
hadleNavigate(2)
