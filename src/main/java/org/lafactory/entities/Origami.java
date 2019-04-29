package org.lafactory.entities;


import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;


@Entity
@Table(name="origami")
public class Origami {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="ID")
	private int id;

	@Column(name="NOM")
	private String nom;
	
	@ManyToOne
	@JoinColumn(name="DIFFICULTE")
	private difOrigami difficulte;
	
	@ManyToOne
	@JoinColumn(name="TYPEORIGAMI")
	private typeOrigami type;
	
	@Column(name="TEMPSREAL")
	private int tempsReal;
	
	@Column(name="NBFEUILLE")
	private int nbFeuille;
	
	@Column(name="NOTE")
	private int note; 
	
	@Column(name="ACTIVE")
	private int active;
	
	@Column(name="TUTOYT")
	private String tutoYT;
	
	public Origami() {
		super();
		// TODO Auto-generated constructor stub
	}


	public Origami(String nom, difOrigami difficulte, typeOrigami type, int tempsReal, int nbFeuille, int note,
			int active, String tutoYT) {
		super();
		this.nom = nom;
		this.difficulte = difficulte;
		this.type = type;
		this.tempsReal = tempsReal;
		this.nbFeuille = nbFeuille;
		this.note = note;
		this.active = active;
		this.tutoYT = tutoYT;
	}


	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getNom() {
		return nom;
	}

	public void setNom(String nom) {
		this.nom = nom;
	}

	public difOrigami getDifficulte() {
		return difficulte;
	}

	public void setDifficulte(difOrigami difficulte) {
		this.difficulte = difficulte;
	}

	public typeOrigami getType() {
		return type;
	}

	public void setType(typeOrigami type) {
		this.type = type;
	}

	public int getTempsReal() {
		return tempsReal;
	}

	public void setTempsReal(int tempsReal) {
		this.tempsReal = tempsReal;
	}

	public int getNbFeuille() {
		return nbFeuille;
	}

	public void setNbFeuille(int nbFeuille) {
		this.nbFeuille = nbFeuille;
	}


	public int getNote() {
		return note;
	}

	public void setNote(int note) {
		this.note = note;
	}

	public int getActive() {
		return active;
	}

	public void setActive(int active) {
		this.active = active;
	}

	public String getTutoYT() {
		return tutoYT;
	}

	public void setTutoYT(String tutoYT) {
		this.tutoYT = tutoYT;
	}

	
}
