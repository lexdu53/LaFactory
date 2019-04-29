package org.lafactory.Service;

import java.util.Optional;

import org.lafactory.entities.Origami;

public interface IOrigamiService {
	public Optional<Origami> getOrigami(int id);
	public void setOrigami(Origami origami);
	public int delOrigami(int id);
	
}
