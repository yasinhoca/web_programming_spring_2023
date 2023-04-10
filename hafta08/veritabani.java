package hafta08;

import java.sql.*;

public class veritabani {
    static String url = "jdbc:postgresql://localhost:5432/noveritabani";
    //uzak serverda ise localhost yerine oranın ip adresi yazılır
    static Connection conn = null;

    static void baglan(){
        try {
            conn = DriverManager.getConnection(url,"postgres","1234");
            System.out.println("Veritabanı bağlantısı başarılı");
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }

    }

    static ResultSet listele(String sorgu){
        Statement st;
        try {
            st = conn.createStatement();
            ResultSet rs = st.executeQuery(sorgu);
            return rs;
        } catch (SQLException e) {
            throw new RuntimeException(e);
        }
    }



}
