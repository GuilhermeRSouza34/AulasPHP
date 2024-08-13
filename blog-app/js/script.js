document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('comment-form');
    const postId = new URLSearchParams(window.location.search).get('id');

    if (commentForm) {
        // Adiciona um novo comentário
        commentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const author = document.getElementById('author').value;
            const content = document.getElementById('comment-content').value;

            fetch('api/add_comment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `post_id=${postId}&author=${encodeURIComponent(author)}&content=${encodeURIComponent(content)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Adiciona o comentário na lista
                    const commentList = document.getElementById('comment-list');
                    const li = document.createElement('li');
                    li.innerHTML = `<strong>${author}</strong><p>${content}</p>`;
                    commentList.appendChild(li);
                    commentForm.reset();
                } else {
                    alert('Erro ao adicionar comentário.');
                }
            });
        });
    }
});