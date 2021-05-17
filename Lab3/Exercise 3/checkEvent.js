function isNhuan(year) {
    if ((year % 100 === 0) && (year % 400 === 0)) {
        return true;
    } else if (year % 4 === 0) {
        return true;
    }
    return false;
}

function checkYear() {
    var year = parseInt(document.getElementById('year').value);
    var month = parseInt(document.getElementById('month').value);
    var day = parseInt(document.getElementById('day').value);
    //check month
    switch (month) {
        case 3:
        case 6:
        case 9:
        case 11:
            if (day > 30) {
                alert('This month only has 30 days !');
                document.getElementById('day').value = 30;
                document.getElementById('typeMonth').value = 30;
            }
            break;
        case 2:
            //check Year
            if (isNhuan(year) === true) {
                if (day > 28) {
                    alert('This month only has 28 days !');
                    document.getElementById('day').value = 28;
                    document.getElementById('typeMonth').value = 28;
                }
            } else if (day > 29) {
                    alert('This month only has 29 days !');
                    document.getElementById('day').value = 29;
                    document.getElementById('typeMonth').value = 29;
            }
            break;
        default :
            document.getElementById('typeMonth').value = 31;
    }
}
