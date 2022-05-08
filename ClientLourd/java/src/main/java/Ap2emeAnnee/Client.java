package Ap2emeAnnee;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Client {
    private Connection cnx;

    public Client(Connection cnx){
        this.cnx = cnx;
    }

    private String[][] executionRequete(String query, int arrayX){
        try {
            Statement st = cnx.createStatement(); //équivalent en pdo : $req = $cnx->prepare();

            if(arrayX > 0){
                ResultSet rs = st.executeQuery(query); //équivalent en pdo : $req->execute();

                //on stocke dans arrayY l'index de la dernière ligne du résultat, on se replace ensuite à la 1ère ligne.
                int arrayY = 0;
                //se déplacer vers la dernière ligne et récupération de l'index de la ligne
                if(rs.last()) arrayY = rs.getRow();
                //on se replace au début
                rs.beforeFirst();

                //on crée un tableau à 2 dimensions ayant pour hauteur, le nombre de lignes retournées par la requête et pour largeur, le nombre d'occurences retournées (voir la requête sql)
                String[][] data = new String[arrayY][arrayX];

                //on attribue aux cases du tableau les valeurs de la requête
                int i = 0;
                while(rs.next()){
                    for(int j = 0; j < data[i].length; j++){
                        data[i][j] = rs.getString(j+1);
                    }
                    i++;
                }

                st.close(); //on ferme la connexion à la bdd
                return data; //on retourne le tableau de données
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
        //si le try ne retourne rien, on retourne un null
        return null;
    }

    public String[][] getInformationsClient(int numClient){
        String query = "SELECT numSerie, dateVente, dateInstall, numContrat, dateSignatureContrat, dateEcheanceContrat, materiel.ref, raisonSocialeClient FROM client, materiel, contratmaintenance WHERE materiel.numClient = client.numClient AND contratmaintenance.numClient = client.numClient AND client.numClient = "+numClient; //requête sql

        String[][] informationsClient = executionRequete(query, 8); // le 2e paramètre doit être équivalent au nombre de colonnes dans la requête (entre le SELECT et le FROM)

        return informationsClient;
    }

    public String[][] getClients(){
        //double crochets = ligne et collone
        String query = "SELECT numClient, raisonSocialeClient FROM client"; //requête sql

        String[][] clients = executionRequete(query, 2); // le 2e paramètre doit être équivalent au nombre de colonnes dans la requête (entre le SELECT et le FROM)

        return clients;
    }
}
