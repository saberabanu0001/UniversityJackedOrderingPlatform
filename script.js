// Add any JavaScript functionalities you need, for example, showing the user box
document.getElementById('user-btn').addEventListener('click', function() {
    document.querySelector('.user-box').style.display = 'block';
});

document.addEventListener('click', function(e) {
    if (!e.target.closest('.icons') && !e.target.closest('.user-box')) {
        document.querySelector('.user-box').style.display = 'none';
    }
});
