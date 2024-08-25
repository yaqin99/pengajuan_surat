import { jsPDF } from "jspdf";

const doc = new jsPDF('p', 'mm', [330, 210]);


var source = window.document.getElementsByTagName("body")[0];
doc.fromHTML(
    source,
    15,
    15,
    {
      'width': 180,'elementHandlers': elementHandler
    });

doc.output("dataurlnewwindow");