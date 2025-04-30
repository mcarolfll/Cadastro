function Calcular(){
   
    const rows = document.querySelectorAll('table tr:not(:first-child)');
    
    rows.forEach(row => {
        
        const valorCell = row.querySelector('td:nth-child(4)');
        const restanteCell = row.querySelector('td:nth-child(5)');
        
        if (valorCell && restanteCell) {
            const valor = parseFloat(valorCell.textContent);
            const restante = parseFloat(restanteCell.textContent);
            
           
            const novoRestante = restante - valor;
            
       
            restanteCell.textContent = novoRestante.toFixed(2);
        }
    });
}