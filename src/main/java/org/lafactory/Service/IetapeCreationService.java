package org.lafactory.Service;

import java.util.Collection;

import org.lafactory.entities.etapeCreation;

public interface IetapeCreationService {
	public etapeCreation getetapeCreation(int id);
	public void setetapeCreation(etapeCreation etapeCreation);
	public int deletapeCreation(int id);
	
	public Collection<etapeCreation> getAlletapeCreation(int id);
	public void setetapesCreation(Collection<etapeCreation> etapesCreation);
	public int delAlletapeCreation(int idOrigami);

	
}
