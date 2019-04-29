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
@Table(name="etapeCreation")
public class etapeCreation {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="ID")
	private int id;
	
	@Column(name="NOM")
	private String nom;
	
	@Column(name="PHOTOETAPE")
	private String photoEtape;
	
	@Column(name="NUMEROETAPE")
	private String numEtape;
	
	@ManyToOne
	@JoinColumn(name="IDORIGAMI")
	private Origami idOrigami;

	public etapeCreation(String nom, String photoEtape, String numEtape, Origami idOrigami) {
		super();
		this.nom = nom;
		this.photoEtape = photoEtape;
		this.numEtape = numEtape;
		this.idOrigami = idOrigami;
	}

	public etapeCreation() {
		super();
		// TODO Auto-generated constructor stub
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

	public String getPhotoEtape() {
		return photoEtape;
	}

	public void setPhotoEtape(String photoEtape) {
		this.photoEtape = photoEtape;
	}

	public String getNumEtape() {
		return numEtape;
	}

	public void setNumEtape(String numEtape) {
		this.numEtape = numEtape;
	}
	
	
}
