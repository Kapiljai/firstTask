window.addEventListener('hashchange', function() {
    if (window.location.href.startsWith("view-source:")) {
      const sourceCodeModal = document.getElementById('source-code-modal');
      const sourceCodeElement = document.getElementById('source-code');
      sourceCodeElement.textContent = document.documentElement.outerHTML;
      $(sourceCodeModal).modal('show'); // Using jQuery to show the modal
    }
  });
