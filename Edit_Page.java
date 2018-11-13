package Project;

import java.awt.BorderLayout;
import java.awt.EventQueue;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JRadioButton;
import javax.swing.JLabel;
import java.awt.Font;
import javax.swing.JButton;
import javax.swing.JEditorPane;

public class Edit_Page extends JFrame {

	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Edit_Page frame = new Edit_Page();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Edit_Page() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JRadioButton rdbtnNewRadioButton = new JRadioButton(" \u0397ome Page");
		rdbtnNewRadioButton.setBounds(6, 56, 109, 23);
		contentPane.add(rdbtnNewRadioButton);
		
		JRadioButton rdbtnSelllet = new JRadioButton("Sell/Let");
		rdbtnSelllet.setBounds(6, 82, 109, 23);
		contentPane.add(rdbtnSelllet);
		
		JRadioButton rdbtnTosaletorent = new JRadioButton("ToSale/ToRent");
		rdbtnTosaletorent.setBounds(6, 108, 109, 23);
		contentPane.add(rdbtnTosaletorent);
		
		JRadioButton rdbtnNews = new JRadioButton("News");
		rdbtnNews.setBounds(6, 134, 109, 23);
		contentPane.add(rdbtnNews);
		
		JRadioButton rdbtnAboutTheOrganization = new JRadioButton("About the organization");
		rdbtnAboutTheOrganization.setBounds(6, 160, 146, 23);
		contentPane.add(rdbtnAboutTheOrganization);
		
		JRadioButton rdbtnContactUs = new JRadioButton("Contact us");
		rdbtnContactUs.setBounds(6, 189, 109, 23);
		contentPane.add(rdbtnContactUs);
		
		JLabel lblEditWebpage = new JLabel("Edit Webpage");
		lblEditWebpage.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 16));
		lblEditWebpage.setBounds(137, 11, 135, 23);
		contentPane.add(lblEditWebpage);
		
		JButton button = new JButton("< Go Back");
		button.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {		
				Webpage adminP = new Webpage();		
				adminP.setVisible(true);
			}
		});
		button.setBounds(0, 238, 109, 23);
		contentPane.add(button);
		
		JButton btnNewButton_2 = new JButton("< Go Back");
		btnNewButton_2.setBounds(0, 238, 109, 23);
		btnNewButton_2.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {		
				AdminPanel adminP = new AdminPanel();		
				adminP.setVisible(true);
			}
		});
		contentPane.add(btnNewButton_2);
		
		JButton button_1 = new JButton("Exit");
		button_1.addActionListener(new ActionListener() {
					public void actionPerformed(ActionEvent e) {		
						System.exit(1);
					}
		});
		button_1.setBounds(345, 238, 89, 23);
		contentPane.add(button_1);
		
		JButton btnNewArticle = new JButton("+ New Article");
		btnNewArticle.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				New_Article info = new New_Article();		
				info.setVisible(true);
			}
		});
		btnNewArticle.setBounds(257, 56, 119, 23);
		contentPane.add(btnNewArticle);
		
		JButton btnDeleteArticle = new JButton("- Delete Article");
		btnDeleteArticle.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Delete_Article info = new Delete_Article();		
				info.setVisible(true);
			}
			
		});
		btnDeleteArticle.setBounds(257, 108, 119, 23);
		contentPane.add(btnDeleteArticle);
		
		
	}
}
