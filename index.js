let current_url = document.location;
document.querySelectorAll('.nav-container a').forEach(function (e) {
  console.log({ href: e.href, curr: current_url });
  if (e.href == current_url) {
    e.setAttribute('aria-current', 'page');
    return;
  }
});
