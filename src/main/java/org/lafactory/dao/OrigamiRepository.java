package org.lafactory.dao;

import org.lafactory.entities.Origami;
import org.springframework.data.jpa.repository.JpaRepository;

public interface OrigamiRepository 
extends JpaRepository<Origami, Integer> {

}
