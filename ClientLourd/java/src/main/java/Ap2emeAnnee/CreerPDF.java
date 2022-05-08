package Ap2emeAnnee;

//import

import com.itextpdf.text.*;
import com.itextpdf.text.pdf.PdfWriter;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.util.logging.Logger;


public class CreerPDF {

	public CreerPDF(String numSerie) throws DocumentException {
		// effectuer un try catch pour les exceptions
		try {
			//création du document avec le name
			Document pdfDoc = new Document();
			String name = "relance_"+numSerie+".pdf";

			//création de l'instance
			PdfWriter.getInstance(pdfDoc, new FileOutputStream(name));

			//ouverture du document
			pdfDoc.open();

			//ce que contient le PDF
			//grâce à la lib header du .jar
			Phrase header = new Phrase("Bonjour à vous\n\n" +
					"Je me permets de vous contacter concernant le matériel avec le numéro de série: "+numSerie+".\n" +
					"Le contrat de maintenance du matériel est arrivé à son terme, veuillez nous contacter pour être de nouveau couvert.\n" +
					"Merci à vous et bonne journée\n\n" +
					"Cordialement,\n" +
					"LeGourpe V de V.");

			pdfDoc.add(header);

			//fermeture du document PDF
			pdfDoc.close();

			//certification que le PDF est bien créé
			System.out.println("PDF ok");

		} catch (FileNotFoundException DocumentException) {
			Logger.getLogger(CreerPDF.class.getName());
		}
	}
}

