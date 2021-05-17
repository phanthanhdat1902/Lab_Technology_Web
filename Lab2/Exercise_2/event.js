var count = 0;
function addHobby() {
    count++;
    var newHobby = '<div id=' + "hobby" + count + '> <input type="text" size="16" maxlength="20" name="hobby[]" placeholder="Nhập sở thích"> <button type="button" onclick="removeHobby(this.id)" id="' + count + '">Xóa sở thích</button></div>';
    document.getElementById('listHobbies').insertAdjacentHTML('beforeend',newHobby);
}

function removeHobby(id) {
    if (document.getElementById('listHobbies').childElementCount > 1) {
        var stt = document.getElementById('hobby' + id);
        stt.remove();
    }
}