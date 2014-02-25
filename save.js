jsonArray = infoArray.join('\r\n');
        var csvContent = 'data:text/csv;charset=utf-8,';
        csvContent += jsonArray;
        var encodedUri = encodeURI(csvContent);
        window.open(encodedUri);